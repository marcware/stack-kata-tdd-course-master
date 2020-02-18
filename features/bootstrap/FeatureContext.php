<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;
use Stack\StackException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $stack;
    private $pop;
    private $exception;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given a new stack
     */
    public function aNewStack()
    {
        $this->stack = new Stack\Stack();
    }

    /**
     * @Then it should contain :count element(s)
     */
    public function itShouldContainElements($count)
    {

        TestCase::assertEquals($count,$this->stack->count());
    }

    /**
     * @When i push the element :data to the stack
     */
    public function iPushTheElementToTheStack($data)
    {
        $this->stack->push($data);

    }

    /**
     * @When i pop the element from the stack
     */
    public function iPopTheElementFromTheStack()
    {
        try{
            $this->pop = $this->stack->pop();
        } catch (\Stack\StackException $exception) {
            $this->exception=$exception;
        }

    }

    /**
     * @Then it should be :data
     */
    public function itShouldBe($data)
    {
        TestCase::assertEquals($data, $this->pop);
    }

    /**
     * @Then it should throw exception
     */
    public function itShouldThrowException()
    {
        TestCase::assertInstanceOf(StackException::class, $this->exception);
    }
}
