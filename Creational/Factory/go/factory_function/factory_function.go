package factory_function

type Person struct {
	Name     string
	Age      int
	EyeCount int // Its always 2 Or 4 (:
}

func NewPerson(name string, age int) *Person {
	return &Person{Name: name, Age: age, EyeCount: 2}
}

// Factory Design Pattern
func TestFactoryMethod() {
	p := Person{Name: "iman", Age: 20, EyeCount: 2}
	p.EyeCount = 4
}
