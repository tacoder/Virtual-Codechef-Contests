<?php require("../../includes/header.php"); ?><h1>Exam Papers</h1><div class="content">
<p>
An exam is to be conducted. <b>N</b> students will give the exam. Students are numbered as <b>1, 2, 3 .  . N</b>. There are <b>M</b> questions and each question should be asked to only one of those <b>N</b> students. The questions are numbered as <b>1, 2, 3 . . M</b>. The conditions are that:</p>
<p>1. <b>i<sup>th</sup></b> question should be asked to exactly <b>A<sub>i</sub></b> students<br />
2. No two consecutively numbered students get the same question to solve.</p>
<p>Given numbers <b>N</b>, <b>M</b> and array <b>A<sub>i</sub></b>, find out if the questions can be assigned to students as per the given conditions.<br />
<br />
Note that summation <b>A<sub>i</sub></b> will be equal to <b>N</b>.
</p>
<h3>Input</h3>
<pre>First line contains two space seperated integers <b>M</b> and <b>N</b>
Second line contains <b>M</b> spaced integers, <b>A<sub>i</sub></b> denoting the times <b>i<sup>th</sup></b> question has to be asked</pre><h3>Output</h3>
<pre>Print "YES" if the questions can be arranged, print "NO" otherwise</pre><h3>Constraints</h3>
<pre><b>1</b> ≤ <b>M</b> ≤ <b>N</b> ≤ <b>10^6</b>
<b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b></pre><h3>Example</h3>
<pre><b>Input:</b>
3 7
3 3 1

<b>Output:</b>
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1</td>
        </tr>
    </table><a href="http://www.codechef.com/submit/CREDEXAM" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>