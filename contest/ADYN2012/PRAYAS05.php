<?php require("../../includes/header.php"); ?><h1>The Dirty Experiment</h1><div class="content">

<p>Mr Vicky is conducting an experiments on shrimps. He puts a number of beakers in a row numbered from <b>1</b> to <b>N</b>. He places 1 shrimp in the first beaker. Then he adds the number of shrimps in this beaker to the next two beakers. Formally, he adds the number of shrimps in beaker <b>i</b> to beaker <b>i+1</b> and <b>i+2</b> without removing any from <b>i</b>. This action is performed for beakers upto <b>N-1</b> such that his <b>N</b> beakers are filled.<br/><br />
Experiments can be performed on a beaker <b>j</b> of capacity <b>Sj</b>, if and only if there exists another beaker <b>k, (2 &lt; k &lt; j)</b> of capacity <b>Sk</b> such that <b>Sj = n*Sk</b>, where <b>n</b> is any positive integer.<br/></br/></br/></p>
<p>The capacity of each beaker is the maximum number of shrimps it can contain which in turn equals the number of shrimps Mr. Vicky had added earlier.<br/><br />
Given a number <b>B</b> representing the number of beakers numbered <b>1,2,.. upto B</b>, find the number of beakers <b>A1</b> that are ready for experiments.<br/><br/></br/></br/></br/></p>
<p>Now there is one more query that comes to Mr. Vicky's mind.<br />
Mr. Vicky has 4 species of shrimps- <b>Calman, Haworth, Dana</b> and <b>Smith</b>. These have a unique way of expanding their species. Each species follow a transformation pattern with each species transforming into 1 or more species after every 1 second. This pattern is static and does not change with time.<br />
<b>At the beginning (t=0) Mr. Vicky starts with a Calman.</b> The number of different species of shrimps that Mr. Vicky obtains for the next 5 seconds as a result of the transformation of each species is as under.<br/><br />
At <b>t=1 sec</b>, he has 1 Haworth,<br/><br />
At <b>t=2 sec</b>, 1 Smith and 1 Dana,<br/><br />
At <b>t=3 sec</b>, 1 Calman, 2 Haworth and 2 Smith, <br/><br />
At <b>t=4 sec</b>, 3 Haworth, 4 Smith and 2 Dana, <br/><br />
At <b>t=5 sec</b>, 2 Calman, 6 Haworth, 9 Smith and 3 Dana and so on.. <br/></br/></br/></br/></br/></br/></br/></p>
<p>Given a time <b>T</b> you have to tell Vicky the number of Calman(<b>A2</b>), number of Haworth(<b>A3</b>) number of Smith(<b>A4</b>) and number of Dana(<b>A5</b>) in the tank.</p>
<h3>Input</h3>
<p>The input begins with the number of test cases <b>C</b>. Then <b>C</b> cases follow each of a single line, containing two integers <b>B</b> and <b>T</b>, the beakers numbered <b>1 to B</b>, and <b>T</b> the time(in sec) elapsed after the start of the experiment.  </p>
<h3>Output</h3>
<p>Print a total of <b>C</b> lines, a single line for each test case containing 5 space separated integers <b>A1, A2, A3, A4</b> and <b>A5</b>.<br />
As these numbers can be quite large print Ai modulo 1000000000000007(10^15+7). i=1, 2, 3, 4, 5</p>
<h3>Constraints</h3>
<pre>
1 &lt;= C &lt;= 100000
0 &lt;= B &lt;= 201200
0 &lt;= T &lt;= 201200
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
3
1 1
2 2
3 3

<b>Output:</b>
0 0 1 0 0
0 0 0 1 1
0 1 2 2 0

<b>Explanation:</b>
Considering the 3rd case, Clearly the three beakers have 1, 1 and 2 shrimps with no pair of (j, k) such<br/> that Sj = n*Sk. Hence beakers ready for experiment is 0. Also after 3 seconds, Vicky has <br/>1 Calmon, 2 Haworth and 2 Smith as given in the problem statements itself. 
</br/></br/></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/the123abhishek">the123abhishek</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>