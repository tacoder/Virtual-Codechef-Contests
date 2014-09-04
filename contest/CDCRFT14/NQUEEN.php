<?php require("../../includes/header.php"); ?><h1>Queen and Stable Relationships</h1><div class="content">
<p>
  Swayamvara, in ancient India, was a practice of choosing a husband, from a<br />
  list of suitors by a girl of marriageable age.</p>
<p>  It is the swayamvara of gossip queen of IIIT, Akshata. Now, Akshata is always<br />
  interested in knowing the stability of the relationships among various<br />
  students of IIIT. Nowadays she is very busy in her swayamvara’s preparation<br />
  and is not able to update herself about the latest gossips. As you know she is<br />
  the gossip queen. She would love if someone could do her a favor and collect<br />
  answers of her questions about relationships in IIIT. It might increase the<br />
  collector’s chance of getting selected for marriage.</p>
<p>  Before starting preparations for the swayamvara, Akshata used to maintain<br />
  notes about the relationships in IIIT and knew all about them. So she thought<br />
  she can help you by providing the notes.</p>
<p>  There are various ways in which two people can be acquaintances :</p>
<ol>
<li>If <b>A</b> and <b>B</b> are in a relationship, then <b>A</b> and <b>B</b> are acquaintances of each<br />
  other.</li>
<li>  If <b>A</b> and <b>B</b> are acquaintances of each other and <b>B</b> and <b>C</b> are acquaintances of<br />
  each other, then<b> A</b> and <b>C</b> are also acquaintances of each other. </li>
</ol>
<p>In Akshata's notes, a relationship between <b>person1</b> and <b>person2</b> is represented<br />
  as <b>"person1 person2"</b>. The Queen's questions are also special. </p>
<p>There are two types of questions:</p>
<ol>
<li>First type of query is whether two people, say <b>A</b> and <b>B</b>, still remain each<br />
  others’ acquaintances even if two people, say <b>C</b> and <b>D</b>, break-up and end their<br />
  relationship.</li>
<li>  Second type of query is whether two people, say <b>A</b> and <b>B</b>, still remain<br />
  acquaintances even if a person, say <b>C</b>, leaves the college (It’s obvious that<br />
  before leaving college, <b>C</b> ends all his/her relationships).</li>
</ol>

<h3>Input Format:</h3>
<p>
  First line of the input contains two integers, <b>N</b> and <b>M</b> where <b>N</b> represents the<br />
  number of people in IIIT and <b>M</b> represents the number of relationships in<br />
  Akshata’s notes.</p>
<p>The next <b>M</b> lines contain <b>2</b> strings each, containing the names of <b>2</b> people who<br />
  are in a relationship.</p>
<p>  Next line contains a single integer <b>Q</b>, which represents the number of<br />
  questions asked by the Queen. Each of the next<b> Q</b> lines represents a query. For<br />
  every query first integer represents the query type.</p>
<p>  If the query type is <b>1</b> then it is followed by four strings in the same line,<br />
  representing <b>A B C and D</b>. you have to output <b>"STABLE"</b> if<b> A and B</b> remain<br />
  acquaintance of each other even if <b>C and D</b> break up and <b>"NOT STABLE"</b><br />
  otherwise.</p>
<p>If the query type is <b>2</b> then it is followed by three strings in the same line,<br />
  representing<b> A B and C</b>. You have to output <b>"STABLE"</b> if <b>A and B</b> remain<br />
  acquaintances even if <b>C</b> leaves college otherwise output <b>"NOT STABLE"</b>. (All<br />
  quotes for clarity)
  </p>
<h3>Output Format:</h3>
<p>
  For every query output <b>"STABLE"</b> or <b>"NOT STABLE"</b> without quotes.
  </p>
<h3>Constraints:</h3>
<p><b><br />
  1 ≤ N ≤ 10000<br />
  1 ≤ M ≤ 50000<br />
  1 ≤ Q ≤ 10000<br />
  Size of all strings will be less than 50 characters.<br /></b>
  </p>
<h3>Sample Input:</h3>
<pre>
3 2
Person1 Person2
Person1 Person3
2
2 Person2 Person3 Person1
1 Person1 Person2 Person1 Person3</pre><h3>Sample Output:</h3>
<pre>
NOT STABLE
STABLE</pre><h3>Explanation:</h3>
<p>
  Person1 is in a relationship with Person2 and Person1 is also in a relation<br />
  with Person3. So Person3 and Person2 are acquaintance.<br />
  First Query: <br />
  But Person2 and Person3 are acquaintance of each other only because of<br />
  person1, if person1 leaves the college, then Person2 and Person3 are also not<br />
  acquaintance of each other.<br />
  Second Query: <br />
  Person1 will remain being acquaintance of Person2 even if Person1 breaks-up<br />
  with Person3.
  </p>
<h3>Sample Input:</h3>
<pre>
17 18
Person1 Person2
Person1 Person4
Person2 Person4
Person4 Person6
Person2 Person6
Person2 Person3
Person3 Person5
Person1 Person7
Person7 Person8
Person7 Person9
Person7 Person10
Person9 Person12
Person8 Person12
Person8 Person11
Person12 Person13
Person14 Person15
Person15 Person16
Person16 Person17
8
2 Person1 Person14 Person7
2 Person1 Person2 Person2
1 Person1 Person14 Person2 Person4
1 Person5 Person13 Person1 Person2
1 Person6 Person2 Person1 Person4
1 Person13 Person6 Person7 Person8
2 Person13 Person6 Person7
2 Person13 Person6 Person8
2 Person13 Person8 Person7</pre><h3>Sample Output:</h3>
<pre>
NOT STABLE
NOT STABLE
NOT STABLE
STABLE
STABLE
STABLE
NOT STABLE
STABLE</pre><p><br />
<b>Problem Setter: Mayank Natani</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
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