<?php require("../../includes/header.php"); ?><h1>Call me, Maybe</h1><div class="content">

<p>
A group of students thought of creating a different VOIP network. The network, rather than being any general graph, was a tree. Every user was assigned a unique <i>userid</i>. This network was hierarchical, i.e there was an admin. The parent of a user is the user connected to it on the unique path when it calls the admin. All users had a parent user except the admin.</p>
<p>
All was working fine, until a weird problem occurred in the network. It so happened that a user was only able to call his parent user. Every user (including admin) was unable to reach any of his children. Although we can see that some users can still send a message to other users. A user <i>u</i> can't call the parent <i>g</i> of his parent <i>p</i> (i.e. his grandparent <i>g</i>) but still he can send a message to his grandparent <i>g</i>. <i>u</i> can achieve this by calling <i>p</i> and asking <i>p</i> to call <i>g</i> and send <i>u</i>'s message to <i>g</i>.</p>
<p>
Your task is to tell, given the <i>userid</i> <b>x</b> and <i>userid</i> <b>y</b>, whether <b>x</b> will be able to send a message to <b>y</b>.
</p>
<h3>Input</h3>
<p>
The first line of the input contains two space separated integers <b>N</b>, the total number of users (including admin) in the VOIP network and <b>Q</b>, the number of queries. </p>
<p>The next line contains the <i>userid</i> <b>U</b> of the admin.</p>
<p>Each of the next <b>N-1</b> lines contains two space separated integers <b>x</b> and <b>y</b> indicating that user <b>x</b> is the parent of user <b>y</b>.<br/><br />
Next in the input are the queries you need to answer. There are <b>Q</b> lines each containing two space separated integers <b>x</b> and <b>y</b>.<br /></br/></p>
<h3>Output</h3>
<p>
For each query output a single line containing </p>
<p>1 if <b>x</b> can send a message to <b>y</b></p>
<p>-1 if <b>y</b> can send a message to <b>x</b></p>
<p>0 otherwise</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5 </sup></b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5 </sup></b></li>
<li><b>0</b> ≤ <b>U</b> ≤ <b>N-1</b></li>
<li><b>0</b> ≤ <b>x,y</b> ≤ <b>N-1</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
1
1 2
1 0
0 1
0 2

<b>Output:</b>
1
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>