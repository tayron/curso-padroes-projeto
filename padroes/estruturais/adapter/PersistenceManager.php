<?php
namespace padroes\estruturais\adapter;

/** 
 *
 */
class PersistenceManager 
{
    /**
     * 
     */
    public function save(AbstractEntity $entity)
    {
        if($entity->getStorageStructure() == AbstractEntity::DOCUMENT){
            $dm = new DocumentManager();
            $document = $entity->toDocument();
            $dm->persist($document);
        }
        
        if($entity->getStorageStructure() == AbstractEntity::RELATIONAL){
            $rm = new RecordManager();
            $record = $entity->toRecord();
            $rm->save($record);
        }
    }
}
