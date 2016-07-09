    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => 'עמוד {:page} מתוך {:pages}, מציג {:current} רשומות  {:count} סהכ , רשומה מס {:start}, ועד {:end}'
    ));
    ?>    </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< דף קודם' , array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next( 'דף הבא >', array(), null, array('class' => 'next disabled'));
    ?>