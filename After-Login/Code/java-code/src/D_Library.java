import java.util.ArrayList;
import java.util.Scanner;

class Staff1 {
    Scanner sc = new Scanner(System.in);
    static ArrayList<String> books = new ArrayList<>();
    Staff1(){
        books.add("Java");
        books.add("C");
        books.add("C++");
        books.add("Python");
        books.add("Php");
        books.add("HTML");
        books.add("Success");
        books.add("Wings of fire");

    }
    void logIn() {
        System.out.println("Log-In Successful");
    }

    int header() {
        while (true) {
            System.out.println("What would you like to do ?");
            System.out.println("1. Add books");
            System.out.println("2. Issue books");
            System.out.println("3. Collect books");
            System.out.println("4. Show available books");
            System.out.println("5. Exit");
            int c = sc.nextInt();
            if (c < 6 && c > 0) {
                return c;
            }
            System.out.println("Enter a valid choice...");
        }
    }

    void addBooks() {
        while (true) {
            System.out.println("Enter the name of the book you want to add ?");
            sc.nextLine();
            books.add(sc.nextLine());
            System.out.println("Add more books ? (y/n)");
            String addMore = sc.next();
            if (!addMore.equals("y")) {
                break;
            }
        }
    }

    void issueBooks() {
        if (books.isEmpty()) {
            System.out.println("No books available");
        } else {
            System.out.println("Which book you want to issue ?");
            sc.nextLine();
            String issuedBook = sc.nextLine();
            if (books.contains(issuedBook)) {
                books.remove(issuedBook);
                System.out.println(issuedBook + " is issued.");
            } else {
                System.out.println(issuedBook + " is not available in Library.");
            }
        }
    }

    void collectBook() {
        System.out.println("Enter the name of the book, taking back...");
        sc.nextLine();
        books.add(sc.nextLine());
        System.out.println("Book successfully returned");
    }

    void availableBooks() {
        if (books.isEmpty()) {
            System.out.println("No books are available in library");
        } else {
            System.out.println("The Available books in library are : ");
            for (String book : books) {
                System.out.println(book);
            }
        }
    }
}
    class Student1 extends Staff1 {
        Scanner sc = new Scanner(System.in);
        int header() {
            while (true) {
                System.out.println("What would you like to do ?");
                System.out.println("1. Request book");
                System.out.println("2. Return book");
                System.out.println("3. Show available books");
                System.out.println("4. Exit");
                int c = sc.nextInt();
                if (c > 0 && c < 5) {
                    return c;
                }
                System.out.println("Enter a valid choice...");
            }
        }

        void requestBook() {
            if (books.isEmpty()) {
                System.out.println("No books available");
            } else {
                System.out.println("Which book do you want to request ?");
                sc.nextLine();
                String reqBook = sc.nextLine();
                if (books.contains(reqBook)) {
                    books.remove(reqBook);
                    System.out.println("Request accepted");
                    System.out.println(reqBook + " has been issued.");
                } else {
                    System.out.println("Request declined");
                }
            }
        }

        void returnBook() {
            System.out.println("Which book you want to return ?");
            sc.nextLine();
            books.add(sc.nextLine());
        }
        void availableBooks() {
            if (books.isEmpty()) {
                System.out.println("No books available");
            }
            else {
                System.out.println("The Available books in library are : ");
                for (String book : books) {
                    System.out.println(book);
                }
            }
        }
    }
    public class D_Library {
        public static int account() {
            Scanner sc = new Scanner(System.in);
            while (true) {
                System.out.println("1. Library staff");
                System.out.println("2. Student");
                System.out.println("3. Exit");
                System.out.print("You are ");
                int c = sc.nextInt();
                if (c < 4 && c > 0) {
                    return c;
                }
                printline();
                System.out.println("Enter a valid choice...");
            }
        }
        static void printline(){
            System.out.println("----------------------------------------------------------");
        }
        public static void main(String[] args) {
            Scanner sc = new Scanner(System.in);
            Staff1 st1 = new Staff1();
            Student1 std1 = new Student1();
            while (true) {
                printline();
                int choice = account();
                switch (choice) {
                    case 1:
                        printline();
                        st1.logIn();
                        while (true) {
                            printline();
                            int choose = st1.header();
                            switch (choose) {
                                case 1:
                                    printline();
                                    st1.addBooks();
                                    break;
                                case 2:
                                    printline();
                                    st1.issueBooks();
                                    break;
                                case 3:
                                    printline();
                                    st1.collectBook();
                                    break;
                                case 4:
                                    printline();
                                    st1.availableBooks();
                                    break;
                                case 5:
                                    printline();
                                    System.out.println("Thank You \n Exit");
                            }
                            if (choose == 5) {
                                break;
                            }
                        }
                        break;
                    case 2: {
                        printline();
                        st1.logIn();
                        while (true) {
                            printline();
                            int choose = std1.header();
                            switch (choose) {
                                case 1:
                                    printline();
                                    std1.requestBook();
                                    break;
                                case 2:
                                    printline();
                                    std1.returnBook();
                                    break;
                                case 3:
                                    printline();
                                    std1.availableBooks();
                                    break;
                                case 4:
                                    printline();
                                    System.out.println("Thank You \n Exit");
                                    break;
                            }
                            if (choose == 4) {
                                break;
                            }
                        }
                    }
                    case 3:
                        printline();
                        System.out.println("Thank You \n Exit");
                        break;
                }
                if (choice == 3) {
                    String logInAgain;
                    System.out.println("Would you like to Log-In again ? (y/n)");
                    logInAgain = sc.next();
                    if (!logInAgain.equals("y")) {
                        System.out.println("Thank You \n Exit");
                        break;
                    }
                }
            }
        }
    }
