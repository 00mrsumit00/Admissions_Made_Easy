class Library {
    String [] books;
    int noOfBooks;
    Library(){
        int noOfBook = 0;
        books = new String [100];
    }
    void addBooks(String books){
        this.books[noOfBooks] = books;
        System.out.println(this.books[noOfBooks] + " is added to library");
        noOfBooks++;
    }
    void availableBooks(){
        System.out.println("----------------------------------------------------");
        System.out.println("Available books in library are: ");
        for(int i = 0;i< books.length;i++){
            if(books[i]==null){
                continue;
            }
            System.out.println("* " + books[i]);
        }
    }
    void issueBook(String book){
       for(int i = 0;i<books.length;i++) {
           if (this.books[i].equals(book)) {
               System.out.println("The books has been issued!");
               this.books[i] = null;
               return;
           }
       }
        System.out.println("The book is not available");
    }
    void returnBook(String book){
        addBooks(book);
    }
    public static void main(String[] args) {
        Library on = new Library();
        on.addBooks("Wings of Fire");
        on.addBooks("Success");
        on.addBooks("Java Programming");
        on.addBooks("Rich Dad Poor Dad");
        on.availableBooks();
        on.issueBook("Success");
        on.availableBooks();
        on.returnBook("Success");
        on.availableBooks();
    }
}
