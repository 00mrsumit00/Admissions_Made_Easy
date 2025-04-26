import java.util.Random;
import java.util.Scanner;

class GuessTheNumber{
    public int num;
    public int guess;
    public int noOfGuesses;
    GuessTheNumber(){
        Random ra = new Random();
        num = ra.nextInt(101);
    }
    public void userInput(){
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter your guess: ");
        guess = sc.nextInt();
    }
    public boolean isCorrectNum(){
        noOfGuesses++;
        if(guess == num){
            System.out.format("You guessed correct number in %d attempts",noOfGuesses);
            return true;
        }
        else if(guess>num){
            System.out.println("You guessed larger number");
        }
        else if (guess<num) {
            System.out.println("You guessed smaller number");
        }
        System.out.println("----------------------------------------------");
        System.out.println("Try again...");
        return false;
    }
}
public class Game2 {
    public static void main(String[] args) {
        GuessTheNumber g = new GuessTheNumber();
        boolean b = false;
        while(!b) {
            g.userInput();
            b = g.isCorrectNum();
        }
    }
}
