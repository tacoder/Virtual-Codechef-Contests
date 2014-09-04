<?php require("../../includes/header.php"); ?><h1>Sorting Twist</h1><div class="content">

<p>
You all must have used insertion sort somewhere in your life. It is a classical sorting technique. One variant of insertion sort works as follows when sorting an array a[1...N] in non-descending order:<br />
<br/><br/><br />
for i  = 2 to N <br/><br />
  	j = i <br/><br />
  	while j > 1 and a[j] &lt; a[j - 1] <br/><br />
  	swap a[j] and a[j - 1] <br/><br />
  	j = j-1 <br/><br />
<br/><br />
The pseudocode is simple to follow. In the ith step, element a[i] is inserted in the sorted sequence a[1...i-1]. This is done by moving a[i] backward by swapping it with the previous element until it ends up in it's right position.<br />
<br/><br />
As you probably already know, the algorithm can be really slow. To study this more, you want to find out the number of times the swap operation is performed when sorting an array.
</br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>
The first line contains the number of test cases T. T test cases follow. The first line for each case contains N, the number of elements to be sorted. The next line contains N integers a[1],a[2],...,a[N].
</p>
<h3>Output</h3>
<p>
Output T lines, containing the required answer for each test case.
</p>
<h3>Constraints</h3>
<p>
1 &lt;= T &lt;= 5<br />
<br/><br />
1 &lt;= N &lt;= 100000<br />
<br/><br />
1 &lt;= a[i] &lt;= 1000000
</br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5
1 1 1 2 2
5
2 1 3 1 2

<b>Output:</b>
0
4

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/coding_freak">coding_freak</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>