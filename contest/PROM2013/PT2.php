<?php require("../../includes/header.php"); ?><h1>Multi Threads</h1><div class="content">

<p>Sheldon is addicted to Facebook , and keeps refreshing the main page not to miss any changes in the "recent actions" list. He likes to read thread conversations of where each thread consists of multiple messages.<br />
Recent actions shows a list of n different threads ordered by the time of the latest message in the thread. When a new message is posted in a thread that thread jumps on the top of the list. No two messages of different threads are ever posted at the same time.<br />
Sheldon has just finished reading all his opened threads and refreshes the main page for some more messages to feed his addiction. He notices that no new threads have appeared in the list and at the i-th place in the list there is a thread that was at the ai-th place before the refresh. He doesn't want to waste any time reading old messages so he wants to open only threads with new messages.<br />
Help Sheldon find out the number of threads that surely have new messages. A thread x surely has a new message if there is no such sequence of thread updates (posting messages) that both conditions hold:<br />
thread x is not updated (it has no new messages);<br />
the list order 1, 2, ..., n changes to a1, a2, ..., an. </p>
<h3>Input</h3>
<p>The first line of input contains an integer T, no. of test cases<br />
Each test case contains n, the number of threads. The next line contains a list of n space-separated integers a1, a2, ..., an where ai (1 ≤ ai ≤ n) is the old position of the i-th thread in the new list. It is guaranteed that all of the ai are distinct.</p>
<h3>Output</h3>
<p>Output a single integer — the number of threads that surely contain a new message.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n</b> ≤ <b>105</b></li>
<li><b>1</b> ≤ <b>ai</b> ≤ <b>n</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
5
5 2 1 3 4
3
1 2 3
4
4 3 2 1


<b>Output:</b>
2
0
3
</pre><p> </p>
<h3>Explanation</h3>
<p><b>case 1.</b>Threads 2 and 5 are placed before the thread 1, so these threads must contain new messages. Threads 1, 3 and 4 may contain no new messages, if only threads 2 and 5 have new messages.</p>
<p><b>case 2.</b>There may be no new messages at all, since the thread order hasn't changed.<br />
In the third test case, only thread 1 can contain no new messages.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-04-2013</td>
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