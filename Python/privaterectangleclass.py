class Rectangle:
    def __init__(self, length, breadth):
        self.__length = length
        self.__breadth = breadth

    def area(self):
        return self.__length * self.__breadth
     
    def compare_area(self,other_rectangle):
        if self.area() > other_rectangle.area():
            print("Rectangle 2 is smaller")
        elif self.area() < other_rectangle.area():
            print("Rectangle 1 is smaller")
        else:
            return "Area is equal"
    def __lt__(self,other_rectangle):
        return self.area() < other_rectangle.area()

    
a,b=map(int,input("Enter the length and breath of rectangle 1: ").split())
x,y=map(int,input("Enter the length and breath of rectangle 2: ").split())


rectangle1 = Rectangle(a,b)
rectangle2 = Rectangle(x,y)

print("Area of rectangle 1:", rectangle1.area())
print("Area of rectangle 2:", rectangle2.area())

cmp=rectangle1.compare_area(rectangle2)
if rectangle1<rectangle2:
    print("Rectangle 1 is smaller than rectangle 2")
else:
    print("Rectangle 1 is bigger than rectangle 2")
