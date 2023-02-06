package factory_generator

import "fmt"

type Employee struct {
	Name, Position string
	AnnualIncome   int
}

// Functional
func NewEmployeeFactory(position string, annualIncome int) func(name string) *Employee {
	return func(name string) *Employee {
		return &Employee{Name: name, Position: position, AnnualIncome: annualIncome}
	}
}

// Structural
type EmployeeFactory struct {
	Position     string
	AnnualIncome int
}

func NewEmployeeFactory2(position string, annualIncome int) *EmployeeFactory {
	return &EmployeeFactory{Position: position, AnnualIncome: annualIncome}
}

func (e *EmployeeFactory) Create(name string) *Employee {
	return &Employee{Name: name, Position: e.Position, AnnualIncome: e.AnnualIncome}
}

func TestFactoryGenerator() {
	developerFactory := NewEmployeeFactory("Developer", 1010101)
	managerFactory := NewEmployeeFactory("manager", 9999999)

	developer1 := developerFactory("Iman")
	manager1 := managerFactory("Someone")

	bossFactory := NewEmployeeFactory2("CEO", 100000)
	boss := bossFactory.Create("ceo ")

	fmt.Println(developer1)
	fmt.Println(manager1)
	fmt.Println(boss)
}
