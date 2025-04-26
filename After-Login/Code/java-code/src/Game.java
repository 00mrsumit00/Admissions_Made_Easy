import java.util.Random;
import java.util.Scanner;

class Game {
    public static void main(String[] args) {
        Random ra = new Random();
        Scanner sc = new Scanner(System.in);
        int noOfAttempts = 0;
        int ranNum = ra.nextInt(101);
        int guess;
        while (true) {
            noOfAttempts++;
            System.out.print("Enter your guess: ");
            guess = sc.nextInt();
            if (guess > ranNum) {
                System.out.println("You guessed larger number");
            }
            else if (guess < ranNum) {
                System.out.println("You guessed smaller number");
            }
            if (guess != ranNum) {
                System.out.println("-----------------------------------------------------------------------------------");
                System.out.println("Try again!");
            }
            if (guess == ranNum) {
                System.out.println("You guessed correct number");
                System.out.println("You took " + noOfAttempts + " attempts to guess the number");
                break;
            }
        }
    }
}