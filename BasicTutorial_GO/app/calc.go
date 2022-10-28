package app

import "fmt"

func ShowNAME(name ...string) (string, int) {

	for index, valName := range name {
		fmt.Println("Name = ", index, "\t: ", valName)
	}
	return "GOGOGOGO!", 13123123
}
