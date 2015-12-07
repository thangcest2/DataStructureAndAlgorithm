<?php
/**
 * CreatedBy: thang.tran@tiki.vn
 * Date: 12/5/15
 * Time: 9:30 AM
 */

namespace OOPCore\ArrayObject;

use OOPCore\Iterator\IteratorCreatorInterface;
use OOPCore\Object;

interface CollectionInterface extends IteratorCreatorInterface
{
    /**
     * @return \OOPCore\Iterator\IteratorInterface
     */
    public function getIterator();

    public function toArray();

    public function add(Object $o);

    public function remove(Object $o);

    public function size();

    public function isEmpty();

    public function contains(Object $o);

    public function addAll(CollectionInterface $c);

    public function removeAll(CollectionInterface $c);


}