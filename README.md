## Regression-php package
My implementation of the regression algorithm

## Requirements
* composer dependency (Carbon DateTime)
* PHP7

### Linear regression algorithm

Basic usage
```php
$testData = [[0, 10], [1, 20], [2, 3], [3, 15], [4, 0]]
$linear = new LinearRegression();
$linear->setSourceSequence($testData);
$linear->make();

/** @var RegressionModel $regressionModel */
$regressionModel = $linear->getRegressionModel();

```

Factory usage

```php
/** @var RegressionModel $regressionModel */
$regressionModel = Regression::Linear([[0, 10], [1, 20], [2, 3], [3, 15], [4, 0]]);
```
### Exponential regression

Basic usage

```php
$exponential = new ExponentialRegression();
$exponential->setSourceSequence($testData);
$exponential->make();
$regressionModel = $exponential->getRegressionModel();
```

Factory usage

```php
$regressionModel = Regression::Exponential($testData);
```
