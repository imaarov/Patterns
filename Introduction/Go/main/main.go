package main

import (
	"fmt"
	"io/ioutil"
	"net/url"
	"strings"
)

var entryCount uint16 = 0

const (
	FILEMOD = 0644
	LINESEP = "\n"
)

// Journal have only one responsibility that keep track of entries
type Journal struct {
	entries []string
}

// adding entries
func (j *Journal) AddEntry(Text string) int {
	entryCount++
	entry := fmt.Sprintf("%d: %s",
		entryCount, Text)
	j.entries = append(j.entries, entry)

	return int(entryCount)
}

// removing entries
func (j *Journal) RemoveEntry(index int) {
	// ...
}

func (j *Journal) String() string {
	return strings.Join(j.entries, "\n")
}

// Seperation of concerns (start of breakig the S(single responsibility) principle)

func (j *Journal) Save(file string) {
	_ = ioutil.WriteFile(file,
		[]byte(j.String()), FILEMOD)
}

func (j *Journal) Load(fileName string) {
	// Load file
}

func (j *Journal) LoadFromWeb(url *url.URL) {
	// Load from web implemention
}

// Instead of implementing all of the function to struct
func SaveToFile(j *Journal, fileName string) {
	_ = ioutil.WriteFile(fileName,
		[]byte(strings.Join(j.entries, LINESEP)), FILEMOD)
}

type Persistance struct {
	LINESEP string
}

func (p *Persistance) SaveToFile(j *Journal, fileName string) {
	_ = ioutil.WriteFile(fileName,
		[]byte(strings.Join(j.entries, p.LINESEP)), FILEMOD)
}

func main() {

}
