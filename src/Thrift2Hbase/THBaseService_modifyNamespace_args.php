<?php
namespace Luffy\Thrift2Hbase;

/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class THBaseService_modifyNamespace_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'namespaceDesc',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Luffy\Thrift2Hbase\TNamespaceDescriptor',
        ),
    );

    /**
     * descriptor which describes the new namespace
     * 
     * @var \Luffy\Thrift2Hbase\TNamespaceDescriptor
     */
    public $namespaceDesc = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['namespaceDesc'])) {
                $this->namespaceDesc = $vals['namespaceDesc'];
            }
        }
    }

    public function getName()
    {
        return 'THBaseService_modifyNamespace_args';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->namespaceDesc = new \Luffy\Thrift2Hbase\TNamespaceDescriptor();
                        $xfer += $this->namespaceDesc->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('THBaseService_modifyNamespace_args');
        if ($this->namespaceDesc !== null) {
            if (!is_object($this->namespaceDesc)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('namespaceDesc', TType::STRUCT, 1);
            $xfer += $this->namespaceDesc->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}