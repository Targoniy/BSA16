<?php
declare (strict_types = 1);

class Calculator
{
    public $operant1;
    public $operant2;
    private $logger;
    const FILE = 'log.txt';
    
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    public function adding(int $operant1, int $operant2): int
    {
      $result = $operant1 + $operant2;
      $this->logger->log(self::FILE, substr(__METHOD__,strripos(__METHOD__,':') + 1), $result, $operant1, $operant2);
      return $result;
    }

    public function dividing(int $operant1, int $operant2): int
    {
        $result = intdiv($operant1, $operant2);
        $this->logger->log(self::FILE, substr(__METHOD__,strripos(__METHOD__,':') + 1), $result, $operant1, $operant2);
        return $result;
    }

    public function substraction(int $operant1, int $operant2): int
    {
        $result = $operant1 - $operant2;
        $this->logger->log(self::FILE, substr(__METHOD__,strripos(__METHOD__,':') + 1), $result, $operant1, $operant2);
        return $result;
    }

    public function multiplication(int $operant1, int $operant2): int
    {
        $result = $operant1 * $operant2;
        $this->logger->log(self::FILE, substr(__METHOD__,strripos(__METHOD__,':') + 1), $result, $operant1, $operant2);
        return $result;
    }

    public function powerOfTwo(int $operant1, int $operant2): int
    {
        $result = pow(2, $operant1);
        $this->logger->log(self::FILE, substr(__METHOD__,strripos(__METHOD__,':') + 1), $result, $operant1, $operant2);
        return $result;
    }
}

