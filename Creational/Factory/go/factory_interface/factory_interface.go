package factory_interface

import "fmt"

type Person interface {
	SayHello()
}

type person struct {
	Name string
	Age  int
}

type adultPerson struct {
	Name string
	Age  int
}

func (p *person) SayHello() {
	fmt.Printf("Hello (person:kid) %s", p.Name)
}

func (p *adultPerson) SayHello() {
	fmt.Printf("Hello (person:adult) %s", p.Name)
}

func NewPerson(name string, age int) Person {
	if age > 18 {
		return &person{Name: name, Age: age}
	}
	return &adultPerson{Name: name, Age: age}
}

// Now p its an interface and we cant access to types props
func TestFactoryInterface() {
	p := NewPerson("Iman", 20)
	p.SayHello()
}
