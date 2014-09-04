<?php require("../../includes/header.php"); ?><h1>Maximizing Marks</h1><div class="content">
<p>An exam consists of <strong>N</strong> questions. The marks of the N questions are <strong>m<sub>1</sub>, m<sub>2</sub>, m<sub>3</sub>, .. m<sub>N</sub></strong> respectively.<br />
Jam is giving the exam and he wants to maximise his number of marks.<br />
However he takes some time to solve each question. The time taken by him to solve the questions are <strong>t<sub>1</sub>, t<sub>2</sub>, t<sub>3</sub>, .. t<sub>N</sub></strong> respectively.<br />
The exams lasts for a total of time <strong>T</strong>.<br />
But Jam's teacher is very smart and she knows that Jam will find out a way to get maximum marks. So, to confuse Jam, she also puts up a bonus offer for him -<br />
The offer is that Jam can select a question for which he can double the marks awarded for that question.<br />
Now, Jam is indeed confused. Help him find out the maximum number of marks he can gain.</p>
<h3>Input</h3>
<p><br /><br />
The first line contains a single integer <b>N</b>, that represents the number of questions.<br /></p>
<p>Second line contains a single integer <b>T</b>, the total time for which the exam takes place.<br /></p>
<p>Third line contains N space-separated integers<br />
<b>m<sub>1</sub>, m<sub>2</sub>, m<sub>3</sub>, ... m<sub>N</sub></b>, where <strong>m<sub>i</sub></strong> represents marks assigned to the <strong>i<sup>th</sup></strong> question.<br /></p>
<p>Fourth line contains N space-separated integers<br />
<b>t<sub>1</sub>, t<sub>2</sub>, t<sub>3</sub>, ... t<sub>N</sub></b>, where <strong>t<sub>i</sub></strong> represents time taken to solve the <strong>i<sup>th</sup></strong> question.<br /></p>
<p> </p>
<h3>Output</h3>
<p>Output a single integer, that is the maximum number of marks Jam can achieve.</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b>&lt;=<b>N</b>&lt;=<b>1000</b><br /><br />
<b>1</b>&lt;=<b>T</b>&lt;=<b>10000</b><br /><br />
<b>1</b>&lt;=<b>m<sub>i</sub></b>&lt;=<b>100000</b><br /><br />
<b>1</b>&lt;=<b>t<sub>i</sub></b>&lt;=<b>10000</b><br /></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
10
1 2 3
4 3 4

<b>Output:</b>
8

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-05-2014</td>
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
            <td>ASM, C, C99 strict, CAML, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, HASK, JAVA, PAS fpc, PAS gpc, PERL, PERL6, PYTH, PYTH 3.1.2, SCALA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>