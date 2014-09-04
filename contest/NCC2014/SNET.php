<?php require("../../includes/header.php"); ?><h1>Social Network</h1><div class="content">
<p>
A person <b>X</b> wanted to publicise his website. To do so, he decided to create a post on a social networking site and share it. Every share costed $1 and <b>X</b> had only $1 remaining. When <b>X</b> shared the post on a friend <b>F</b>'s profile, the post could be viewed on the profiles of all <b>F</b>'s friends (<b> except X himself </b>), friends of his friends, friends of friends of friends, and so on. <b>X</b> wanted maximum number of people to view the post. With which friend should he share the post?<br />
</p>
<h3>Input</h3>
<p>First line contains <b>X</b> the name of the person.<br /><br />
Second line contains an integer <b>K</b> which denotes the total number of lines which follow<br /><br />
<b>K</b> lines follow, each of the <b>K</b> lines contain the input in the format:<br /><br />
<b>A B</b>, which denotes that <b>A</b> and <b>B</b> are friends.<br /><br /></p>
<ul>
<li>Note that <b>A</b> and <b>B</b> are names (ie. strings).</li>
<p><br /></p>
<li>Name of each person will be unique.</li>
<p><br /></p>
<li>A person can have multiple friends.</li>
<p><br /></p>
<li>If A is a friend of B, then B is a friend of A.</li>
<p><br /></p>
<p></p>
<p> </p>
<h3>Output</h3>
<p>Output <b>two</b> lines :<br /><br /></p>
<ul>
<li>First line should contain the name of the friend with whom <b>X</b> should share the post.</li>
<p><br /></p>
<li>The second line should contain the number of people who will then see the post.</li>
<p><br />
</p></ul>
<p>If there are multiple answers possible, print the lexicographically smallest one.<br /></p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b>&lt;=<b>k</b>&lt;=<b>10^5</b><br /><br />
Name of a person will be a string of maximum <b>8</b> characters consisting of lower case and upper case characters only<br /></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
A
4
A B
A C
C D
C E


<b>Output:</b>
C
3


<b>Explanation:</b>

    A
  /     \
B      C
       /    \
      D   E

If <b>A</b> shares the post with <b>B</b>, only <b>B</b> will view the post.<br />
If <b>A</b> shares the post with <b>C</b>, the post will be viewed by <b>C</b>, <b>D</b> and <b>E</b>.<br />
Hence, <b>A</b> should share the post with <b>C</b>.<br />

</pre><p> </p>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
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