#Our team members: 
import csv as c
from itertools import combinations as combi

#def load_dataset(file_path, num_transactions):
def load_dataset(file_path):
    DataSet = []
    with open(file_path, 'r') as file:
        rawdata = c.reader(file)
        for i, row in enumerate(rawdata):
            #if i >= num_transactions:
                #break
            Transactions = set(row)
            Transactions.discard('')
            DataSet.append(Transactions)
    return DataSet

def get_frequent_itemsets(DataSet, support):
    SetofItems = {}
    for transaction in DataSet:
        for item in transaction:
            SetofItems[item] = SetofItems.get(item, 0) + 1

    frequent_itemsets = {}
    for item, dem in SetofItems.items():
        if dem >= support:
            frequent_itemsets[frozenset([item])] = dem

    return frequent_itemsets

def apriori(dataset, support):
    f_itemset = {}
    chot = 1

    while True:
        candidates = {}
        for transaction in dataset:
            for itemset in combi(transaction, chot):
                itemset = tuple(sorted(list(itemset)))
                candidates[itemset] = candidates.get(itemset, 0) + 1

        frequent_itemsets_k = {}
        for itemset, dem in candidates.items():
            if dem >= support:
                frequent_itemsets_k[itemset] = dem
                #print({dem})

        if not frequent_itemsets_k:
            break

        f_itemset.update(frequent_itemsets_k)
        chot += 1
        #print({chot})

    return f_itemset

FilePath = 'C:\\Users\\Admin\\Documents\\machine learning\\SuperCenterDataNew.csv'
MinimumSupportRange = range(3, 11)
#num_transactions = 100
#num_transactions = 200
#num_transactions = 300
#dataset = load_dataset(FilePath, num_transactions)
dataset = load_dataset(FilePath)

absolute_Support = int(input("Enter the absolute support: "))

for min_support in MinimumSupportRange:
    frequent_itemset = apriori(dataset, min_support)
    print(f"Minimum Support: {min_support}")
    print("Frequent Itemsets:")
    for itemset, dem in frequent_itemset.items():
        print(f"{itemset}: {dem}")
    print('\n')