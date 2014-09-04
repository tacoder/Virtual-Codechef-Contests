<?php require("../../includes/header.php"); ?><h1>Silly YooTi</h1><div class="content">

<p align="justify" style="font-size:13px">
Silly is the chief of the secret department that works on Encryption techniques. YooTi works under Silly in that department. Silly is working on a new project. The project often requires the <b>Exclusive-OR maximum</b> to be found out on a set of integers with respect to another given integer called the <b>query integer</b>. So every time a <b>query integer</b> comes up to Silly, he asks YooTi to find out the <b>Max (A<sub>i</sub> xor B)</b> where A<sub>i</sub> is an integer from the set A and B is the query integer. YooTi is frustrated now because Silly gives too many <b>query integers</b> and she has to search out the whole set to find the answer. Can you help YooTi with this?</p>
<h3>Input</h3>
<p style="font-size:13px">
First line contains <b>N</b>, the number of integers the set A.<br />
Next line contains <b>N</b> space separated positive integers. The value of each integer will not exceed 1000000.<br />
Next line contains <b>Q</b>, the number of query integers. Next <b>Q</b> lines contain the query integers B, one per line.</p>
<h3>Output</h3>
<p style="font-size:13px">Output  <b>Q</b> lines 'corresponding to each query containing a single integer, the <b>max(B xor A<sub>1</sub>, B xor A<sub>2</sub>,.......,B xor A<sub>n</sub>).</b></p>
<h3>Constraints</h3>
<p style="font-size:13px">
1&lt;=N&lt;=100000<br /><br />
1&lt;=Q&lt;=10000<br /><br />
1&lt;=A<sub>i</sub> ,B&lt;=1000000</p>
<h3>Example</h3>
<pre style="font-size:13px">
<b>Input:</b>
5
5 8 12 20 18
4
1
10
20
16

<b>Output:</b>
21
30
28
28

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhidce2013">abhidce2013</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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