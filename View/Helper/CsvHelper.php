<?php
class CsvHelper extends AppHelper
{
var $delimiter = ',';
var $enclosure = '"';
var $filename = 'Export.csv';
var $line = array();
var $buffer;

function CsvHelper()
{
    $this->clear();
}
function clear() 
{
    $this->line = array();
    $this->buffer = fopen('php://temp/maxmemory:'. (5*1024*1024), 'r+');
}

function addField($value) 
{
    $this->line[] = $value;
}

function endRow() 
{
    $this->addRow($this->line);
    $this->line = array();
}

function addRow($row) 
{
    fputcsv($this->buffer, $row, $this->delimiter, $this->enclosure);
}

function renderHeaders() 
{
    header("Content-Type: text/csv; charset=windows-1255");
    header("Content-type:application/vnd.ms-excel");
    header("Content-disposition:attachment;filename=".$this->filename);
    print "\xEF\xBB\xBF"; // UTF-8 BOM
}

function setFilename($filename) 
{
    $this->filename = $filename;
    if (strtolower(substr($this->filename, -4)) != '.csv') 
    {
        $this->filename .= '.csv';
    }
}

function render($outputHeaders = true, $to_encoding = null, $from_encoding ="utf8") 
{
    if ($outputHeaders) 
    {
        if (is_string($outputHeaders)) 
        {
            $this->setFilename($outputHeaders);
        }
        $this->renderHeaders();
    }
    rewind($this->buffer);
    $output = stream_get_contents($this->buffer);

    if ($to_encoding) 
    {
        $output = mb_convert_encoding($output, $to_encoding, $from_encoding);
    }
    return $this->output($output);
}


function utf8_heb_encode($a_Str)
{
    $l_utf8 = "" ;
    for ($i = strlen($a_Str)-1; $i >= 0 ; $i--)
    {
        $l_ch = ord($a_Str[$i]);
                    
        if (($l_ch >= 192) && ($l_ch <= 207))
        {
            $l_utf8 = pack("CC",214,176 + $l_ch - 192) . $l_utf8;
        }
        else if (($l_ch >= 208) && ($l_ch <= 250))
        {
            $l_utf8 = pack("CC",215,128 + $l_ch - 208) . $l_utf8;
        }
        else
        {
            if (($l_uch = utf8_safe_from_latin(chr($l_ch)) !== false))
            {
                $l_utf8 = $l_uch . $l_utf8;
            }
            else
            {
                $l_utf8 = utf8_encode(chr($l_ch)) . $l_utf8;
            }
        }
    }
            
    return $l_utf8;
}


function utf8_heb_decode($a_Str)
{
    $l_utf8 = "" ;
    $l_Len = strlen($a_Str);
    $i = 0;
    while ($i < $l_Len)
    {
        $l_ch1 = ord($a_Str[$i++]);
                    
        if (($l_ch1 & 0x80) == 0)
        {
            // 000000?00007F Simple latin 1 char (0xxxxxxx)
                            
            $l_utf8 .= utf8_decode(pack("C",$l_ch1));
        }
        else if (($l_ch1 & 0xE0) == 0xC0)
        {
            // 000080?0007FF 2 chars (110xxxxx 10xxxxxx)


            $l_ch2 = ord($a_Str[$i++]);
                            
            if (($l_ch1 == 214) && ($l_ch2 >= 176) && ($l_ch2 <= 176+207-192))
            {
                $l_utf8 .= chr($l_ch2 + 192 - 176);
                                    
            }
            else if (($l_ch1 == 215) && ($l_ch2 >= 128) && ($l_ch2 <= 128+250-208))
            {
                $l_utf8 .= chr($l_ch2 + 208 - 128);

            }
            else
            {
                $l_utf8 .= utf8_decode(pack("CC",$l_ch1,$l_ch2));
            }
                            
                            
        }
        else if (($l_ch1 & 0xF0) == 0xE0)
        {
            // 000800?00FFFF 3 chars (1110xxxx 10xxxxxx 10xxxxxx)

            $l_ch2 = ord($a_Str[$i++]);
            $l_ch3 = ord($a_Str[$i++]);
                            
            $l_utf8 .= utf8_decode(pack("CCC",$l_ch1,$l_ch2,$l_ch3));
                            
        }
        else if (($l_ch1 & 0xF8) == 0xF0)
        {
            // 010000?10FFFF 4 chars (1110xxxx 10xxxxxx 10xxxxxx 10xxxxxx)

            $l_ch2 = ord($a_Str[$i++]);
            $l_ch3 = ord($a_Str[$i++]);
            $l_ch4 = ord($a_Str[$i++]);
                            
            $l_utf8 .= utf8_decode(pack("CCCC",$l_ch1,$l_ch2,$l_ch3,$l_ch4));
        }
                    
                    
    }
    return $l_utf8;
}

function utf8_safe_from_latin($l_latin)
{
    $l_TransArr = array(
        130 => pack("CCC",0xe2,0x80,0x9a),
        131 => pack("CC", 0xc6,0x92),
        132 => pack("CCC",0xe2,0x80,0x9e),
        133 => pack("CCC",0xe2,0x80,0xa6),
        134 => pack("CCC",0xe2,0x80,0xa0),
        135 => pack("CCC",0xe2,0x80,0xa1),
        136 => pack("CC", 0xcb,0x86),
        137 => pack("CCC",0xe2,0x80,0xb0),
        138 => pack("CC", 0xc5,0xa0),
        139 => pack("CCC",0xe2,0x80,0xb9),
        140 => pack("CC", 0xc5,0x92),
        145 => pack("CCC",0xe2,0x80,0x98),
        146 => pack("CCC",0xe2,0x80,0x99),
        147 => pack("CCC",0xe2,0x80,0x9c),
        148 => pack("CCC",0xe2,0x80,0x9d),
        149 => pack("CCC",0xe2,0x80,0xa2),
        150 => pack("CCC",0xe2,0x80,0x93),
        151 => pack("CCC",0xe2,0x80,0x94),
        152 => pack("CC", 0xcb,0x9c),
        153 => pack("CCC",0xe2,0x84,0xa2),
        154 => pack("CC", 0xc5,0xa1),
        155 => pack("CCC",0xe2,0x80,0xba),
        156 => pack("CC", 0xc5,0x93),
        159 => pack("CC", 0xc5,0xb8)
    );
                    
    if (isset($l_TransArr[ord($l_latin)]))
    {
        return $l_TransArr[ord($l_latin)];
    }
    else
    {
        return false;
    }
}




}
?>