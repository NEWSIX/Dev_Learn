package main

import (
	"GoBasic/app"
	"fmt"
)

type Product struct {
	name     string
	price    float64
	catagory string
	discount int
}

func main() {
	fmt.Println(app.ShowNAME("NEWSIX23", "NEWSOX231"))
	//gun := Product{name: "Gun", price: 22.3, catagory: "weapon", discount: 20}
	//fmt.Println(gun)
	/*
		var newsix = "NEWSIX"
		if newsix == "NEWSIX" {
			fmt.Println("YEAH!")
		} else {
		}

		var score int
		fmt.Scanf("%d", &score)
		fmt.Println("Value = ", score)


			switch score {
			case 1:
				fmt.Print("CASE 1")
			case 2:
				fmt.Print("CASE 2")
			default:
				fmt.Print("DEFAULT")
			}
	*/
	/*	arr := [2]int{}
		var score int
		for i := 0; i < len(arr); i++ {
			fmt.Printf("Input number[%v] :\t", i+1)
			fmt.Scanf("%d", &score)
			arr[i] = score
		}
		fmt.Println(cap(arr))
		for i := 0; i < len(arr); i++ {
			fmt.Printf("\n================\nIndex :\t %v \nValue :\t %v ", i+1, arr[i])
		}
	*/

	/*
		myslice := []int{}
		myslice = append(myslice, 12)

		fmt.Printf("myslice = %v\n", myslice)
		fmt.Printf("length = %d\n", len(myslice))
		fmt.Printf("capacity = %d\n", cap(myslice))
	*/

	/*
		myMaps := map[string]string{}
		myMaps["ONE"] = "THAILAND NUMBER 1"
		myMaps["TWO"] = "2 Be Number 1"
		//fmt.Println(myMaps["TWO"])

		a, b := myMaps["TWO"]
		fmt.Println(a)
		fmt.Println(b)
	*/
	/*
		myMaps := map[string]string{}
		myMaps["a"] = "A1"
		myMaps["b"] = "B2"
		myMaps["c"] = "C3"
		myMaps["d"] = "D4"

		for i, val := range myMaps {
			fmt.Printf("%v\t%v\n", i, val)
		}
	*/
	//fmt.Println(ShowMSG("NEWSIX!!", "THAIGUO!"))
}

/*
func ShowMSG(name ...string) (string, int) {

	for index, valName := range name {
		fmt.Println("Name = ", index, "\t: ", valName)
	}
	return "GOGOGOGO!", 13123123
}
*/
