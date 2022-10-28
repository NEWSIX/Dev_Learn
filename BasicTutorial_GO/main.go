package main

import "fmt"

func main() {
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
	arr := [5]int{}
	var score int
	for i := 0; i < len(arr); i++ {
		fmt.Printf("Input number[%v] :\t", i+1)
		fmt.Scanf("%d", &score)
		arr[i] = score
	}

	for i := 0; i < len(arr); i++ {
		fmt.Printf("\n================\nIndex :\t %v \nValue :\t %v ", i+1, arr[i])
	}

}
