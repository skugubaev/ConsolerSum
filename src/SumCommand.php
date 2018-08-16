<?php

namespace Skugubaev;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Skugubaev\Sum;

class SumCommand extends Command {
	public function configure()
	{
		$this->setName("sum")
		     ->setDescription("This command sums two numbers")
		     ->addArgument('a', InputArgument::REQUIRED, 'first number')
		     ->addArgument('b', InputArgument::REQUIRED, 'second number');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$a = $input->getArgument('a');
		$b = $input->getArgument('b');
		$sum = new Sum();
		$output->writeln($sum->sum($a, $b));
	}
}
