<?php require("../../includes/header.php"); ?><h1>Task Completion</h1><div class="content">

<p>There are n tasks to be completed. Each task ti has an individual time requirement of ci minutes and is dependent on a number of other tasks. It requires at least ri of the tasks that task ti depends on, to be completed before ti can start. Also, if task ti is dependent on tj, then ti can only start a minute after the completion of tj. Independent tasks can be executed simultaneously. </p>
<p>We need to find the minimum time in which all the tasks can be completed, provided the dependencies are satisfied. </p>
<h3>Input</h3>
<p>
For each test case, the first line of input specifies the number of tasks, n (numbered from 0 to n-1). </p>
<p>The next n lines specify the time requirement and dependency requirement in the following format:<br />
ci <white space> ri for task ti, on the ith line. </white></p>
<p>The next line specifies the number of dependencies, p.<br />
The next p lines specify the dependencies in ti <white space> tj format, where ti is dependent on tj. You can assume the following: </white></p>
<p>max (ri) &lt; 50<br />
max (ci) &lt;= 100000 </p>
<h3>Output</h3>
<p>
The minimum time required to complete all tasks (in minutes), one test case per line. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1 
4 
1 2 
2 0 
4 0 
2 0 
3 
0 1 
0 2 
0 3 


<b>Output:</b>
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bst0602">bst0602</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-01-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>