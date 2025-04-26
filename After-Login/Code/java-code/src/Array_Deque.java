import java.util.ArrayDeque;

public class Array_Deque {
    public static void main(String[] args) {
        ArrayDeque<Integer> ad1 = new ArrayDeque<>();
        ArrayDeque<Integer> ad2 = new ArrayDeque<>();
        ad1.add(65);
        ad1.add(55);
        ad1.add(45);
        ad1.add(35);

        ad1.add(7);
        ad1.add(71);
        ad1.add(67);
        ad1.addFirst(8);
        ad1.addLast(18);
        ad1.addAll(ad2);
        // ad1.clear();
        ad1.remove();
        System.out.println(ad1.isEmpty());
        System.out.println(ad1.getFirst());
        System.out.println(ad1.getLast());
    }
}
