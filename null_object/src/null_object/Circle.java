package null_object;

public class Circle implements Shape2D {
    @Override
    public void move(double x, double y) {
        System.out.println("Shape has been moved by vector (" + x + ",  " + y + ")");
    }
}