package main

import "fmt"

func main() {
    numbers := []int{1, 2, 3}

    for index, value := range numbers {
        fmt.Println(index, value)
    }

    fmt.Println()

    numbers1 := make(map[string]int)

    numbers1["primeiro"] = 1
    numbers1["segundo"] = 2

    for index, value := range numbers1 {
        fmt.Println(index, value)
    }
}
