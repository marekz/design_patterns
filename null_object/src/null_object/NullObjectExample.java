package null_object;

public class NullObjectExample {

    public static void main(String[] args) {

        Shape2D[] shapes = {
                new NullShape2D(),
                new Circle(),
                new NullShape2D(),
                new Circle()
        };

        for (int i = 0; i < shapes.length; i++) {
            shapes[i].move(i,i);
        }
        
    }

}
