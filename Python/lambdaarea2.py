p=float(input("Enter the side length of the square: "))
q=float(input("Enter the length of the rectangle: "))
r=float(input("Enter the width of the rectangle: "))
s=float(input("Enter the base of the triangle: "))
t=float(input("Enter the height of the triangle: "))


x=lambda a:a*a
print(x(p))      
y=lambda l,b : l*b
print(y(q,r))
z=lambda b,h : 0.5*b*h
print(z(s,t))