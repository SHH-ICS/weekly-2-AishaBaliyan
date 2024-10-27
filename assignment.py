import math

def calculate_diameter(diameter):
    radius = diameter / 2
    area = math.pi * (radius ** 2)
    circumference = math.pi * diameter
    return area, circumference

def main():
    diameter_input = input("Please enter the diameter of the circle: ")

    if diameter_input.isdigit():
        diameter = int(diameter_input)
        
        area, circumference = calculate_diameter(diameter)
        
        print(f"For a circle with a diameter of {diameter}:")
        print("Area:", area)
        print("Circumference:", circumference)
    else:
        print("Please enter a valid integer for the diameter.")
main()
