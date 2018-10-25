<?php

namespace Marketplace;

use App\PimConnectorFactory;
use Marketplace\Model\ProductInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Application extends Command {

    /** @var PimConnectorFactory */
    private $factory;

    public function __construct(PimConnectorFactory $factory)
    {
        $this->factory = $factory;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:demo');
        $this->addArgument('pim', InputArgument::REQUIRED, 'name of pim manager (wynd or russe)');
    }

    public function execute(InputInterface $input = null, OutputInterface $output = null)
    {
        $productManager = $this->factory->factory($input->getArgument('pim'));

        $products = $productManager->findAll();

        $section = $output->section();
        $table = new Table($section);
        $table->setHeaders(['classe', 'interface', 'nom', 'code bar']);

        $output->writeln(sprintf('<info> La collection est de type %s</info>', get_class($products)));

        foreach ($products as $product) {
            /** @var ProductInterface $product */
            $table->appendRow([
                get_class($product),
                implode(', ', class_implements($product)),
                $product->getName(),
                $product->getEan(),
            ]);
        }

        dump($products);
    }
}