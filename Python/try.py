def copy_odd_lines(input_file, output_file):
    try:
        with open(input_file, 'r') as source_file, open(output_file, 'w') as target_file:
            lines = source_file.readlines()
            
            # Writing odd lines to the target file
            for i in range(0, len(lines), 2):
                target_file.write(lines[i])
                
        print(f"Odd lines copied from '{input_file}' to '{output_file}' successfully.")
    except FileNotFoundError:
        print(f"Error: One or both files not found.")
    except Exception as e:
        print(f"An error occurred: {e}")

# Example usage
input_file_path = 'input.txt'  # Replace with the path to your input file
output_file_path = 'output.txt'  # Replace with the path to your output file

copy_odd_lines(input_file_path, output_file_path)