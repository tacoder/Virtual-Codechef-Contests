<?php require("../../includes/header.php"); ?><h1>Night at the Library</h1><div class="content">
<p>Recently, Aparna and Surya were extremely excited by use of linear algebra in natural language processing. They realized that linear algebra was the key to many information retrieval algorithms as mentioned by their professor or otherwise. So one night, they went to the library to explore further.
</p>
<p>
Surya suddenly posed a seemingly random question. He asked Aparna, assume I have a graph of n vertices and m edges. Now if I construct a symmetric matrix; he flirtatiously adds (as he always does), I like symmetry cause knowing one half you can get the other, just like the two of us. He continues, "I will define the (i,j) entry as follows: <br /> <br />
M(i,j) = 1 if degree(i)!=0 and i=j <br /><br />
M(i,j) = -1/sqrt(degree(i)*degree(j)) if i vertex i is adjacent to j in graph I give <br /><br />
M(i,j) = 0 otherwise. <br /><br />
<br />
He then says, I will now calculate the <a href="http://en.wikipedia.org/wiki/Eigenvalues_and_eigenvectors" target="_blank">eigenvalues</a> of this matrix.<br />
Can you tell me if the difference between the largest eigenvalue and the second smallest eigenvalue is at-least 2. <br />
 </p>
<p>Surya quickly realized he has to get out an eigenvalue decomposer. Both sit and started to code, while Siddhartha approaches them with his MATLAB code. Your task is to answer Surya's question before Siddhartha does so that you can score some brownie points ;)
</p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two integers <b>N, M</b> denoting the number of vertices and edges. Then <b>M</b> lines follow. the ith line describes the ith edge. It contains two space separated integers u and v. Note the vertices are 0-indexed. </li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output a single line containing "YES" if the difference in largest eigenvalue and second smallest eigenvalue is at-least 2. "NO" otherwise. (Quotes for clarity. Do not print them)</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N*(N+1)/2</b></li>
<li> For floating point calculations, ignore decimal point rounding upto 10^-6 </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 3
0 1
0 2
1 2

<b>Output:</b>
NO
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
The matrix as per the specifications is <br /><br />
1 -0.5 -0.5<br /><br />
-0.5 1 -0.5<br /><br />
-0.5 -0.5 1<br /></p>
<p>The eigenvalues are 0,1.5,1.5 . Hence the difference between largest eigenvalue and second smallest eigenvalue is 1.5 - 1.5 = 0. which is strictly less than 2. <br /><br /></p>
<p><b>Warning</b> Input text files contains large I/O. Consider using faster I/O techniques.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>