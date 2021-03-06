<?php require("../../includes/header.php"); ?><h1>Sequence Transmission</h1><div class="content">

<p style="text-align:justify"><b>WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.</b></p>
<p style="text-align:justify">Chef has encrypted the super secret recipe for his bitsoup into a sequence of <b>N</b> unsigned integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... <b>A<sub>N</sub></b>. Each of these are <b>M bit integers</b> - meaning, their binary representation will only have at most <b>M</b> bits.</p>
<p style="text-align:justify">Chef is now transmitting this recipe to the Sous Chef. He <b>partitions the sequence</b> into several <b>disjoint</b>, <b>contiguous</b> groups and sends them one by one. Each partition may contain one or more integers which are contiguous in the sequence. Chef can partition a sequence of <b>N</b> integers in many ways, but the receiving program of the Sous Chef has a constraint.</p>
<p style="text-align:justify">For each group of integers it receives, let <b>S</b> represent the sum of the integers in the group. The receiver program only accepts the group of integers if the <b>M<sup>th</sup> least significant bit</b> of <b>S</b> is <b>0</b>. See the explanation section for clarity.</p>
<p style="text-align:justify">Chef wants to know how many ways exist to partition the recipe such that the Sous Chef can receive it completely.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two integers <b>N</b> and <b>M</b> denoting the length of Chef's sequence and the number of bits that are adequate to represent each number in the sequence. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... <b>A<sub>N</sub></b> denoting the sequence.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single integer denoting the number ways you can partition Chef's sequence such that the Sous Chef's receiving program will accept each partition. Since this number can be very large output this number modulo <b>1000000009</b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 10</b><br /> <b>1 ≤ N ≤ 200000</b><br /> <b>1 ≤ M ≤ 18</b><br /> <b>1 ≤ A<sub>i</sub> &lt; 2<sup>M</sup></b></p>
<h3>Sample</h3>
<pre><b>Input:</b>
4
6 10
4 4 4 4 4 4
6 3
4 4 4 4 4 4
5 8
1 1 1 1 128
7 4
4 5 6 7 8 9 10

<b>Output:</b>
32
4
0
3

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1.</b> You can partition the sequence in 32 ways. Note that the sum of all the numbers in the sequence is 24. The 10<sup>th</sup> bit in 24 is already 0. Any partition's sum will be less than or equal to 24 anyway, thus each partitioning way is valid. Thus the answer is 32.</p>
<p style="text-align:justify">If you don't see why the answer is 32, consider the following</p>
<p> </p>
<ul>
<li>There is only 1 partition of { 4 }</li>
<li>There are 2 partitions of { 4, 4 } =&gt; { {4}, {4} } and { {4,4} }</li>
<li>There are 4 partitions of { 4, 4, 4 } =&gt; { {4}, {4}, {4} }, { {4}, {4,4} }, { {4,4}, {4} } and { {4,4,4} }</li>
<li>There are 8 partitions of { 4, 4, 4, 4 } and so on..</li>
</ul>
<p> </p>
<p style="text-align:justify"><b>Test Case 2.</b>The following 4 ways are the only ways to partition the sequence so that the Sous Chef's program accepts all the partitions.</p>
<p> </p>
<ul>
<li>{ {4,4}, {4,4}, {4,4} } =&gt; The 3<sup>rd</sup> bit is 0 in 8, which is the sum of values in each of the partitions.</li>
<li>{ {4,4}, {4,4,4,4} } =&gt; The 3<sup>rd</sup> bit is 0 in 8 as well as 16, which is the sum of values in the two partitions respectively.</li>
<li>{ {4,4,4,4}, {4,4} }</li>
<li>{ {4,4,4,4,4,4} }</li>
</ul>
<p> </p>
<p style="text-align:justify"><b>Test Case 3.</b> There is no way you can put 128 in any partition with the given sequence such that the Sous Chef's receiver would accept the partition.</p>
<p style="text-align:justify"><b>Test Case 4.</b> The following 3 partitions are valid.</p>
<p> </p>
<ul>
<li>{ {4}, {5}, {6}, {7,8,9,10} }</li>
<li>{ {4}, {5}, {6,7,8}, {9,10} }</li>
<li>{ {4,5,6,7,8,9,10} }</li>
</ul>
<p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-05-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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