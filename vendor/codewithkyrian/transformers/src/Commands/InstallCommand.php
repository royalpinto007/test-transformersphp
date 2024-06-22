<?php

declare(strict_types=1);

namespace Codewithkyrian\Transformers\Commands;

use Codewithkyrian\Transformers\Transformers;
use Codewithkyrian\Transformers\Utils\LibsChecker;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

#[AsCommand(
    name: 'install',
    description: 'Initialize Transformers PHP and downloads the required shared libraries.',
    aliases: ['initialize', 'init']
)]
class InstallCommand extends Command
{
    protected function configure(): void
    {
        $this->setHelp('This command initializes Transformers PHP and downloads the required shared libraries.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            LibsChecker::check();

            $this->askToStar($input, $output);

            return Command::SUCCESS;
        } catch (Exception $e) {
            $output->writeln('<error>' . $e->getMessage() . '</error>');

            return Command::FAILURE;
        }
    }


    protected function askToStar(InputInterface $input, OutputInterface $output): void
    {
        if ($input->getOption('no-interaction')) {
            return;
        }

        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion('? Would you like to show some love by starring the Transformers repo on GitHub? ', true);

        if ($helper->ask($input, $output, $question)) {
            if (PHP_OS_FAMILY === 'Darwin') {
                exec('open https://github.com/CodeWithKyrian/transformers-php');
            }
            if (PHP_OS_FAMILY === 'Linux') {
                exec('xdg-open https://github.com/CodeWithKyrian/transformers-php');
            }
            if (PHP_OS_FAMILY === 'Windows') {
                exec('start https://github.com/CodeWithKyrian/transformers-php');
            }

            $output->writeln('✔ Thank you!');
        } else {
            $output->writeln('✔ That\'s okay. You can always star the repo later.');
        }
    }
}