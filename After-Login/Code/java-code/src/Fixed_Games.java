import java.util.Scanner;
public class Fixed_Games {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int Players_Move;
        int Computers_Move=0;

        while(true) {

            while (true) {
                System.out.println("1 for Rock, 2 for Paper, 3 for Scissor");
                System.out.print("Enter your choice: ");
                Players_Move = sc.nextInt();

                if (Players_Move == 1 || Players_Move == 2 || Players_Move == 3) {
                    break;
                }
                System.out.println(Players_Move + " is not a valid choice, Please choose again");
            }

            switch (Players_Move) {
                case 1 -> System.out.print("You choose Rock and ");
                case 2 -> System.out.print("You choose Paper and ");
                case 3 -> System.out.print("You choose Scissor and ");
            }

            if (Players_Move == 1) {
                Computers_Move = 3;
            } else if (Players_Move == 2) {
                Computers_Move = 1;
            } else if (Players_Move == 3) {
                Computers_Move = 2;
            }
            switch (Computers_Move) {
                case 1 -> System.out.println("Computer choose Rock");
                case 2 -> System.out.println("Computer choose Paper");
                case 3 -> System.out.println("Computer choose Scissor");
            }

            if (Players_Move == Computers_Move) {
                System.out.println("It's a tie");
            }
            if (Players_Move == 1) {
                if (Computers_Move == 2) {
                    System.out.println("You Lose!!!");
                } else if (Computers_Move == 3) {
                    System.out.println("You wins!!!");
                }
            } else if (Players_Move == 2) {
                if (Computers_Move == 1) {
                    System.out.println("You wins!!!");
                } else if (Computers_Move == 3) {
                    System.out.println("You lose!!!");
                }
            } else if (Players_Move == 3) {
                if (Computers_Move == 1) {
                    System.out.println("You lose!!!");
                } else if (Computers_Move == 2) {
                    System.out.println("You wins!!!");
                }
            }
            System.out.println("Do you want to play again ? (y/n)");
            String playAgain = sc.next();
            System.out.println("----------------------------------------------------------------------");
            if (!playAgain.equals("y")) {
                break;
            }
        }
    }

}
