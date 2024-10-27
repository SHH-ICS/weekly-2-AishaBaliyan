import math

def calculate_circle_properties(diameter):
    radius = diameter / 2
    area = math.pi * (radius ** 2)
    circumference = math.pi * diameter
    return area, circumference

def main():
    try:
        diameter = float(input("Enter the diameter of the circle: "))
        
        if diameter <= 0:
            print("Diameter must be a positive number.")
        else:
            area, circumference = calculate_circle_properties(diameter)
            

            print(f"\nFor a circle with a diameter of {diameter}:")
            print(f"Area: {area:.2f}")
            print(f"Circumference: {circumference:.2f}")
    else:
        print("Invalid input. Please enter a numerical value for the diameter.")

