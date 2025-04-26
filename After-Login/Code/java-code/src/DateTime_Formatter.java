import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

public class DateTime_Formatter{
    public static void main(String[] args) {
        LocalDateTime dt = LocalDateTime.now();
        System.out.println(dt);

        // DateTimeFormatter dtf = DateTimeFormatter.ISO_LOCAL_DATE;
        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("dd/MM/yyyy E\nH:m a");
        String date = dt.format(dtf);
        System.out.println(date);
    }
}