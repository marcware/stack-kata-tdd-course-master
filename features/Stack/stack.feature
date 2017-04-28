Feature: stack memory
 Create a stack

  Scenario: A new stack should be empty
    Given a new stack
    Then it should contain 0 elements

  Scenario: Push an element to the stack
    Given a new stack
    When i push the element 1 to the stack
    Then it should contain 1 element

  Scenario: Pop an element from the stack
    Given a new stack
    When i push the element 1 to the stack
    And i pop the element from the stack
    Then it should contain 0 elements

  Scenario: Pop an element "prueba" from stack
    Given a new stack
    When i push the element "prueba" to the stack
    And i pop the element from the stack
    Then it should be "prueba"

  Scenario: Pop an element from empty stack
    Given a new stack
    When i pop the element from the stack
    Then it should throw exception


