def read_file_lines(filename):
    lines = []  # Create an empty list to store lines

    # Open the file in read mode
    with open(filename, 'r') as file:
        # Read each line in the file
        for line in file:
            # Strip newline character and add the line to the list
            lines.append(line.strip())

    return lines

# Example usage:
filename = 'sample.txt'  # Change this to your file path
lines = read_file_lines(filename)

# Print the lines stored in the list
for line in lines:
    print(line)