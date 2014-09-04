<?php require("../../includes/header.php"); ?><h1>H-on-K A Incorporation</h1><div class="content">
<p>Our hero elohb has started a new business in the name of H-on-K A Inc. like all new business he wants a huge opening and most media to cover his opening<br />ceremony. He books a large theatre and then divides them into multiple view zones for people to watch and the opening ceremony.</p>
<p>Now, since this is a huge function elohb doesn't wants any problem he realises he should reserve privileges for VIP's in his function so he creates special<br />9 view zones for the VIPs each containing AC's, better lightning facility,better serving,better food.</p>
<p>He further wants to divide the VIP's into 2 categories VIP1 and VIP2(more important) and he doesn't wants the VIP's to realise this so he uses a special nummeration of there seat numbers.</p>
<p>In case of VIP1 numbering of the tickets, the seats in the 1st view zone are numbered 1-4, the seats in the 2nd view zone are numbered 5-8, and so on.</p>
<p>In case of VIP2 numbering of the tickets, every seat's number consists of two digits. The 1st digit is the no of the view zone and the second digit is the number of the seat within that view zone. view zones are numbered 1-9, and the 4 seats within each view zone are numbered 1, 3, 4, 6 (in the same order as in the VIP1 numbering of the tickets).</p>
<p>Now here comes the problem during printing the press person forgot to take care of special numbering of the tickets he prints the tickets in unknown type,<br />but fortunately he prints all in the same type. So, you can easily convert the number into correct one. Since, this can be a long process he decides to convert them all into VIP2.Unfortunately, this news spread like a wildfire in the thieves and they want to enjoy the luxury for free they print themselves<br />tickets almost identical to the real ones. so they also join the theatre rooms :(.</p>
<p>Your task is to identify a set of given tickets into VIP1 and VIP2 and convert both numberings into VIP2.Also since in some cases the input can be valid for both VIP1 and VIP2 you can't decide you simply say that the input is "UNCLASSIFIABLE" in case you find that the seat numbers are not valid you say its a thief and  print "THIEF".</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>test</b> ≤ <b>1000 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000 </b></li>
</ul>
<h3>Input</h3>
<p>First line contains T no. of test cases. The following lines contain a number N. The next line follows with N seperated ticket numbers.</p>
<h3>Output</h3>
<p>For each test case print the converted ticket types.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
4<br />1<br />56<br />2<br />16 10<br />1<br />57<br />1<br />16

<strong>Output:</strong>
56<br />46 33<br />THIEF<br />UNCLASSIFIABLE
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/insomnia_adm">insomnia_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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