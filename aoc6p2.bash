set -x
temp_file=$(mktemp)
temp_file2=$(mktemp)
cp file.txt $temp_file
for run in {1..256}; do cat $temp_file | tr "012345678" "f01234567" | sed 's/f/6,8/g' > $temp_file2; cp $temp_file2 $temp_file; done; cat $temp_file | tr -d "," | wc -c