<?php

class AllPrinter //❌
{
    public function print()
    {
        echo 'print';
    }
    public function scan()
    {
        echo 'scan';
    }
}

// Interface Segregation Principle - ISP
interface Printer
{
    public function print();
}
interface Scanner
{
    public function scan();
}

class Printing implements Printer
{
    public function print()
    {
        echo 'print';
    }
}

class Scanning implements Scanner
{
    public function scan()
    {
        echo 'scan';
    }
}