Feature: Homepage
  in order to know about you
  As a guest user
  I need to be able to see your homepage

  Scenario: See hello message
    Given I am on "/"
    Then I should see "Hello world"
