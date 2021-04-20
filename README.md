# Hexel Utilities

This is a library of general utility classes that can be used in any context. Some of these utilities cover functionality that is not natively available in PHP, or are available in a later release of PHP but a project I'm actively working on hasn't upgraded to yet. For example, I wrote `ArgumentValidation\ArgValidate::objectHasNestedProperty()` because a project I'm working on hasn't made the leap from PHP 7.4 to PHP 8, which introduced the null-safe operator. Some utilities are syntactic sugar to either DRY up repetitive code, add expressive semantics to make code more self-documenting, or both.

Pull Requests are welcome.

---

# ArgumentValidation

These utilities are meant to add advanced validation to method arguments. All methods are invoked statically. There are often two versions of a validator, the "thrown" class and "non-thrown" class. The "thrown" class with throw an `\InvalidArgumentException` if the test returns false, while the "non-thrown" will simply return false.