Overview of Algorithms
======================

Algorithms are step-by-step procedures or formulas for solving problems. In computer science, algorithms are often used for data processing, calculation, and automated reasoning. This document serves as a reference for understanding different types of algorithms and their applications.

Table of Contents
-----------------

1.  Sorting Algorithms
2.  Searching Algorithms
3.  Graph Algorithms
4.  Dynamic Programming
5.  Greedy Algorithms
6.  Divide and Conquer
7.  Cryptographic Algorithms
8.  String Processing Algorithms
9.  Geometric Algorithms
10. Machine Learning Algorithms

* * * * *

1\. Sorting Algorithms
----------------------

Sorting is the process of rearranging a sequence of objects in a particular order (often ascending or descending).

### Examples

-   Bubble Sort: Simple comparison-based algorithm where each pair of adjacent elements is compared and swapped if they are in the wrong order. It's less efficient for large lists.
-   Quick Sort: Uses the divide-and-conquer approach. It chooses an element as a pivot and partitions the array around the pivot.
-   Merge Sort: Also a divide-and-conquer algorithm. It continually splits a list in half, sorts both halves, and then merges them back together.
-   Heap Sort: Takes advantage of the properties of a heap data structure to sort an array.
-   Insertion Sort: Builds the final sorted list one item at a time, making numerous comparisons.
-   Selection Sort: Divides the input list into two parts: the sublist of items already sorted and the sublist of items remaining to be sorted, and it repeatedly selects the smallest (or largest, depending on the order) element from the unsorted sublist.

* * * * *

2\. Searching Algorithms
------------------------

Searching algorithms are designed to check for an element or retrieve an element from any data structure.

### Examples

-   Linear Search: Simplest search algorithm that checks every element in the list sequentially.
-   Binary Search: Efficient algorithm that searches a sorted array by repeatedly dividing the search interval in half.
-   Depth-First Search (DFS): Used for traversing or searching tree or graph data structures; it explores as far as possible along each branch before backing up.
-   Breadth-First Search (BFS): Another method for searching tree or graph data structures; it explores all the neighbor nodes at the present depth before moving on to nodes at the next depth level.

* * * * *

3\. Graph Algorithms
--------------------

These algorithms are designed to compute the shortest paths, spanning trees, and network flows in graph data structures.

### Examples

-   Dijkstra's Algorithm: Finds the shortest paths between nodes in a graph, which may represent, for example, road networks.
-   Kruskal's Algorithm: A minimum spanning tree algorithm used for finding the minimum spanning tree for a connected weighted graph.
-   Floyd-Warshall Algorithm: Solves the all-pairs shortest path problem, providing a comprehensive view of the best paths through the graph.
-   Bellman-Ford Algorithm: Computes shortest paths from a single source vertex to all of the other vertices in a weighted graph.

* * * * *

4\. Dynamic Programming
-----------------------

Dynamic programming is used where we have problems, which can be divided into similar sub-problems, so that their results can be re-used.

### Examples

-   Knapsack Problem: Gives an optimal way of fitting different values or weights into a knapsack of a fixed capacity.
-   Longest Common Subsequence: Finds the longest subsequence common to all sequences in a set of sequences.
-   Matrix Chain Multiplication: Determines the optimal way to multiply given sequences of matrices.

* * * * *

5\. Greedy Algorithms
---------------------

A greedy algorithm is an algorithmic paradigm that follows the problem-solving heuristic of making the locally optimal choice at each stage.

### Examples

-   Huffman Coding: A popular greedy algorithm used for the lossless data compression.
-   Dijkstra's Algorithm: (Also listed under graph algorithms.) It's often considered a greedy algorithm as it picks the locally optimal solution.
-   Prim's Algorithm: A minimum spanning tree algorithm that finds a subset of edges forming a tree that includes every vertex.

* * * * *

6\. Divide and Conquer
----------------------

This algorithm involves three steps at each level of recursion: dividing the problem into smaller subproblems, conquering the subproblems by solving them recursively, and then combining the solutions into the answer for the original problem.

### Examples

-   Merge Sort: (Also listed under sorting algorithms.) It's a perfect example of divide and conquer.
-   Quick Sort: (Similarly, it's also a sorting algorithm.) It partitions an array and then calls itself recursively twice to sort the two resulting subarrays.
-   Binary Search: (Listed under searching algorithms.) It demonstrates divide and conquer by dividing the search interval in half repeatedly.

* * * * *

7\. Cryptographic Algorithms
----------------------------

These algorithms are designed to secure the transmission and storage of data against third-party access.

### Examples

-   RSA Algorithm: One of the first practical public-key cryptosystems and is widely used for secure data transmission.
-   DES (Data Encryption Standard): A symmetric-key algorithm for the encryption of digital data.
-   AES (Advanced Encryption Standard): A symmetric encryption algorithm that has become the U.S. federal government standard.

* * * * *

8\. String Processing Algorithms
--------------------------------

These algorithms are used for processing strings or validating the structural integrity of strings.

### Examples

-   KMP (Knuth-Morris-Pratt): Efficient for finding sub-strings in strings.
-   Rabin-Karp Algorithm: A string-searching algorithm that uses hashing to find any one of a set of pattern strings in a text.
-   Regular Expression Matching: Algorithmic representations of regular expressions used for string processing.

* * * * *

9\. Geometric Algorithms
------------------------

These are algorithms for computational geometry. For example, algorithms used in the field of computer graphics.

### Examples

-   Line Intersection: Determines whether two segments intersect.
-   Polygon Triangulation: Divides a polygon into triangles.
-   Convex Hull: Computes the smallest convex set that contains all the points.

* * * * *

10\. Machine Learning Algorithms
--------------------------------

These algorithms allow software applications to become more accurate in predicting outcomes without being explicitly programmed.

### Examples

-   Linear Regression: Predicts the value of a variable based on the value of another variable.
-   Decision Trees: Used in operations research, specifically in decision analysis, to help identify a strategy most likely to reach a goal.
-   Neural Networks: Biologically inspired network of artificial neurons used in pattern recognition.
-   K-Means Clustering: A method to automatically partition a set of items into k groups.
