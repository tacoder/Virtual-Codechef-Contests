<?php require("../../includes/header.php"); ?><h1>Very Long Suffix Array</h1><div class="content">
<p>Let S = s<sub>1</sub>, s<sub>2</sub>, ...,s<sub>n</sub> be a string and let S[i, j] denote the substring s<sub>i</sub>, s<sub>i+1</sub>, ... s<sub>j</sub>. The <b>suffix array</b> A of S is an array of integers giving the starting positions of suffixes of S in lexicographical order. This means, the entry A[i] contains the starting position of the i-th smallest(lexicographically) suffix of S. In other words, for all 1 &lt; i ≤ n: S[A[i - 1], n] &lt; S[A[i], n].</p>
<p>Let us take an example. Suppose S = "12323". Then all suffixes of S are "12323", "2323", "323", "23", "3". If we sort the suffixes lexicographically, we get "12323", "23", "2323", "3", "323". Therefore the suffix array, which gives the starting positions of suffixes in lexicographic order, will be A = 1, 4, 2, 5, 3.</p>
<p>There is exactly one suffix array for each string. However, several strings can give the  same suffix array. In this problem, given a suffix array A of length <b>N</b>, you have to calculate the number of strings S whose suffix array is A.</p>
<p>However, N can be very large, so the array A is not given directly. You should initialize the array A as A[i] = i for all 1 ≤ i ≤ N and apply <b>M</b> operations to it in order to obtain the desired suffix array A. Each operation can be of one of the following types:</p>
<ul>
<li><b>0 u v</b>: Remove the sub-sequence A[u,v] and bring it to the front. After this operation, the N elements would be in the following order: <br /> A[u], A[u + 1], ...<br /> A[v], A[1], A[2], ... A[u - 1], A[v + 1], A[v + 2], ... A[N]. </li>
<li><b>1 u v</b>: Flip A[u,v]. After this operation, the N elements would be in the following order: <br /> A[1], A[2], ... A[u-1], A[v], A[v-1], ... A[u+1], A[u], A[v+1], A[v+2], ... A[N]. </li>
</ul>
<p>For this problem, a string is <b>an array of positive integers</b>. Additionally, the number of different integers used in a string must be same as the largest integer in the string. For example: (1, 2, 2) and (4, 5, 1, 2, 3) are valid strings while (1, 1, 3) and (-1, 0, 1, 2) are not.</p>
<p>Since the result can be extremely large, you just have to print it modulo <b>1,000,000,007(10<sup>9</sup> + 7) </b></p>
<h3>Input</h3>
<p>The first line of the input contains 2 space separated integers, <b>N</b> and <b>M</b>. <b>N</b> is the length of suffix array, and <b>M</b> is the number of operations.<br /> Each of the next <b>M</b> lines contains 3 space separated integers representing an operation of one of the two types.</p>
<h3>Output</h3>
<p>Output a single line containing the number of strings corresponding to the given suffix array modulo <b>1,000,000,007(10<sup>9</sup> + 7) </b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1,000,000,000 (10<sup>9</sup>)</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>100,000 (10<sup>5</sup>)</b></li>
<li>For all operations, <b>1</b> ≤ <b>u</b> ≤ <b>v</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 3
0 3 4
<b>Output:</b>
4
</pre>
<h3>Explanation</h3>
<p>The initial array is (1, 2, 3, 4).<br /> After the first operation the array becomes (1, 3, 2, 4).<br /> After the second operation the array becomes (2, 4, 1, 3).<br /> The 4 possible strings are (2, 1, 2, 2), (2, 1, 3, 2), (3, 1, 3, 2), (3, 1, 4, 2).</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-05-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>